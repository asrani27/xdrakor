const CACHE_NAME = 'laravel11-pwa-v2';

const urlsToCache = [
    '/',
    '/offline',
    '/build/assets/app-Bc8T2CRF.css',
    '/build/assets/app-HX-J-vxX.js',
    '/build/assets/app-l0sNRNKZ.js'
];

// Install - cache static files
self.addEventListener('install', event => {
    event.waitUntil(
        caches.open(CACHE_NAME)
            .then(cache => cache.addAll(urlsToCache))
            .catch(err => console.error('Cache error:', err))
    );
});

// Activate - delete old caches
self.addEventListener('activate', event => {
    event.waitUntil(
        caches.keys().then(keys => {
            return Promise.all(
                keys.map(key => {
                    if (key !== CACHE_NAME) {
                        return caches.delete(key);
                    }
                })
            );
        })
    );
});

// Fetch - serve from cache if available
self.addEventListener('fetch', event => {
    event.respondWith(
        caches.match(event.request)
            .then(response => response || fetch(event.request))
            .catch(() => caches.match('/offline'))
    );
});
