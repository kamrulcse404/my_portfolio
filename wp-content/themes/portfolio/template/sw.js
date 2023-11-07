// Service Worker registration
if ('serviceWorker' in navigator) {
    // Register the Service Worker
    navigator.serviceWorker.register('service-worker.html')
      .then(function(registration) {
        console.log('Service Worker registered with scope:', registration.scope);
      })
      .catch(function(error) {
        console.error('Service Worker registration failed:', error);
      });
  }
  
  // Install event
  self.addEventListener('install', function(event) {
    event.waitUntil(
      caches.open('your-app-cache-name.html') // Replace with your app's cache name
        .then(function(cache) {
          return cache.addAll([
            '/', // Cache the root path
            'index-2.html', // Cache additional files or paths
            'blog-single.html', // Cache additional files or paths
            'blog.html', // Cache additional files or paths
            'work-single.html', // Cache additional files or paths
            'works-list.html', // Cache additional files or paths
            'works.html', // Cache additional files or paths
            'assets/css/style.css',
            'assets/css/dark.css',
            'assets/css/vendors/animate.css',
            'assets/css/vendors/bootstrap.css',
            'assets/css/vendors/magnific-popup.css',
            'assets/css/vendors/splitting.css',
            'assets/css/vendors/swiper.css',
            'assets/fonts/font-awesome/css/font-awesome.css',
            '/assets/images',
            'assets/js/bootstrap.js',
            // Add more files to cache as needed
          ]);
        })
    );
  });
  
  // Activate event
  self.addEventListener('activate', function(event) {
    event.waitUntil(
      caches.keys().then(function(cacheNames) {
        return Promise.all(
          cacheNames.filter(function(cacheName) {
            // Delete outdated caches (if you change the cache name above)
            return cacheName.startsWith('your-app-cache-name') && cacheName !== 'your-app-cache-name';
          }).map(function(cacheName) {
            return caches.delete(cacheName);
          })
        );
      })
    );
  });
  
  // Fetch event
  self.addEventListener('fetch', function(event) {
    event.respondWith(
      caches.match(event.request)
        .then(function(response) {
          // Return the cached response if found, otherwise fetch from network
          return response || fetch(event.request);
        })
    );
  });
  