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
    // Hanya tangani request dari domain kita sendiri dan dengan protokol http/https
    if (event.request.url.startsWith(self.location.origin) &&
        (event.request.url.startsWith('http://') || event.request.url.startsWith('https://'))) {
        
        event.respondWith(
            caches.match(event.request).then(function(response) {
                return response || fetch(event.request).then(function(res) {
                    return caches.open('offline').then(function(cache) {
                        cache.put(event.request, res.clone()).catch(err => {
                            console.warn('Gagal cache:', event.request.url, err);
                        });
                    });
                });
            })
        );
    }
});