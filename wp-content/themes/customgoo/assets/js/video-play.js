(function(){
    function ready(fn){ document.readyState!=='loading' ? fn() : document.addEventListener('DOMContentLoaded', fn); }
    ready(() => {
        const v = document.querySelector('.preview-video__el');
        if (!v) return;
    
        const rm = window.matchMedia('(prefers-reduced-motion: reduce)');
        if (rm.matches) {
            v.removeAttribute('autoplay');
            v.pause();
            v.controls = true;
            return;
        }
    
        const io = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
            if (entry.isIntersecting) {
                v.play().catch(()=>{ });
            } else {
                v.pause();
            }
            });
        }, { threshold: 0.5 });
    
        io.observe(v);
    
        v.setAttribute('playsinline','');
        v.setAttribute('muted','');
    });
})();
  