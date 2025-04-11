document.addEventListener('DOMContentLoaded', function () {
    let adBlockDetected = false;

    const bait = document.createElement('script');
    bait.src = 'https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js';

    bait.onerror = function () {
        // Jika AdBlock terdeteksi, redirect
        window.location.href = "/adblock";
      };
  
      // Optional: tambahkan pengecekan Brave
      if (navigator.brave && navigator.brave.isBrave) {
        navigator.brave.isBrave().then(function (isBrave) {
          if (isBrave) {
            window.location.href = "{{ route('adblock') }}";
          }
        });
      }
  

    document.body.appendChild(bait);
  });