(function () {
  const btn = document.querySelector('.nav-toggle');
  const nav = document.querySelector('.primary-nav');

  if (!btn || !nav) return;

  btn.addEventListener('click', () => {
    const expanded = btn.getAttribute('aria-expanded') === 'true';
    btn.setAttribute('aria-expanded', String(!expanded));
    nav.classList.toggle('is-open', !expanded);
    document.body.classList.toggle('nav-open', !expanded);
  });
})();
