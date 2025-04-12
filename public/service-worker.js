const CACHE_NAME = 'my-cache-v1';
const urlsToCache = [
    '/',
    '/build/assets/app-Bc8T2CRF.css',
    '/build/assets/app-HX-J-vxX.js',
    '/offline'
];

// Install Service Worker
self.addEventListener('install', event => {
    event.waitUntil(
        caches.open(CACHE_NAME)
              .then(cache => cache.addAll(urlsToCache))
    );
});

// Fetch from cache first
self.addEventListener('fetch', event => {
    event.respondWith(
        caches.match(event.request)
              .then(response => {
                  return response || fetch(event.request);
              })
              .catch(() => caches.match('/offline'))
    );
});
