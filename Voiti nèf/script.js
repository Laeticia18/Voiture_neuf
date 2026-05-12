/* ── CHARGEMENT DE LA NAVBAR ─────────────────────────── */
fetch("nav.html")
  .then(res => res.text())
  .then(html => {
    document.getElementById("navbar").innerHTML = html;
    setActiveLink();
  });

function setActiveLink() {
  const page = window.location.pathname.split("/").pop() || "index.html";
  document.querySelectorAll("nav a.nav-link").forEach(a => {
    const href = a.getAttribute("href");
    if (href === page) a.classList.add("active");
  });
}

/* ── CARROUSEL ───────────────────────────────────────── */
function initCarousel() {
  const track = document.querySelector(".carousel-track");
  const dots  = document.querySelectorAll(".carousel-dot");
  if (!track) return;

  let current = 0;
  const total = track.children.length;
  let timer;

  function goTo(n) {
    current = (n + total) % total;
    track.style.transform = `translateX(-${current * 100}%)`;
    dots.forEach((d, i) => d.classList.toggle("active", i === current));
  }

  function next() { goTo(current + 1); }
  function prev() { goTo(current - 1); }

  function startAuto() {
    clearInterval(timer);
    timer = setInterval(next, 5000);
  }

  document.querySelector(".carousel-btn.next")
    ?.addEventListener("click", () => { next(); startAuto(); });
  document.querySelector(".carousel-btn.prev")
    ?.addEventListener("click", () => { prev(); startAuto(); });

  dots.forEach((d, i) =>
    d.addEventListener("click", () => { goTo(i); startAuto(); })
  );

  goTo(0);
  startAuto();
}

document.addEventListener("DOMContentLoaded", initCarousel);
