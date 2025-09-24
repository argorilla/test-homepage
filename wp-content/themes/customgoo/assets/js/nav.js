(function(){
    function ready(fn){ document.readyState !== 'loading' ? fn() : document.addEventListener('DOMContentLoaded', fn); }
  
    ready(() => {
        const burger = document.querySelector('.hamburger');
        const drawer = document.getElementById('primary-drawer');
        if (!burger || !drawer) return;
    
        const backdrop = drawer.querySelector('.drawer-backdrop');
    
        function openDrawer(){
            if (drawer.hidden) drawer.hidden = false;        // tampilkan
            requestAnimationFrame(() => drawer.classList.add('is-open')); // animasi jalan
            burger.setAttribute('aria-expanded','true');
            document.documentElement.classList.add('noscroll');
            const first = drawer.querySelector('a,button,[tabindex]:not([tabindex="-1"])');
            if (first) first.focus();
        }
  
        function closeDrawer(){
            drawer.classList.remove('is-open');
            burger.setAttribute('aria-expanded','false');
            document.documentElement.classList.remove('noscroll');
            // sembunyikan setelah animasi selesai agar transisi mulus
            const inner = drawer.querySelector('.drawer-inner');
            const onEnd = (e) => {
            if (e.target !== inner) return;
                drawer.hidden = true;
                inner.removeEventListener('transitionend', onEnd);
            };
            inner.addEventListener('transitionend', onEnd, { once:true });
            burger.focus();
        }
  
        burger.addEventListener('click', () => {
            const expanded = burger.getAttribute('aria-expanded') === 'true';
            expanded ? closeDrawer() : openDrawer();
        });
  
        if (backdrop) backdrop.addEventListener('click', closeDrawer);
        document.addEventListener('keydown', (e) => { if (e.key === 'Escape' && !drawer.hidden) closeDrawer(); });
    });
})();
  