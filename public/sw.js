const preLoad = function () {
    return caches.open("offline").then(function (cache) {
        // caching index and important routes
        return cache.addAll(filesToCache);
    });
};

self.addEventListener("install", function (event) {
    event.waitUntil(preLoad());
});

const filesToCache = [
    '/',
    '/offline.html'
];

const checkResponse = function (request) {
    return new Promise(function (fulfill, reject) {
        fetch(request).then(function (response) {
            if (response.status !== 404) {
                fulfill(response);
            } else {
                reject();
            }
        }, reject);
    });
};

const addToCache = function (request) {
    return caches.open("offline").then(function (cache) {
        return fetch(request).then(function (response) {
            return cache.put(request, response);
        });
    });
};

const returnFromCache = function (request) {
    return caches.open("offline").then(function (cache) {
        return cache.match(request).then(function (matching) {
            if (!matching || matching.status === 404) {
                return cache.match("offline.html");
            } else {
                return matching;
            }
        });
    });
};

self.addEventListener('fetch', function(event) {
    // Cek hanya untuk request http/https dari origin kita
    if (
        event.request.url.startsWith(self.location.origin) &&
        (event.request.url.startsWith('http://') || event.request.url.startsWith('https://'))
    ) {
        event.respondWith(
            caches.match(event.request).then(function(response) {
                return response || fetch(event.request).then(function(res) {
                    return caches.open('offline').then(function(cache) {
                        // Bungkus cache.put dengan try-catch supaya error tidak nongol di console
                        try {
                            cache.put(event.request, res.clone());
                        } catch (e) {
                            // Optional: console.warn('Gagal cache:', e);
                        }
                        return res;
                    });
                }).catch(function() {
                    // Fallback jika fetch gagal total
                    return caches.match('/offline.html');
                });
            }).catch(function() {
                return caches.match('/offline.html');
            })
        );
    }
});
