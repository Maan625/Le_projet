function changerMode() {
  const body = document.body; // Récupère l'élément <body> de la page

  const bouton = document.getElementById('modeButton'); // Récupère le bouton avec l'ID "modeButton"



  body.classList.toggle("dark-mode");  // Ajoute la classe "dark-mode" si elle n'existe pas, ou la supprime si elle existe déjà


  if (body.classList.contains("dark-mode"))   // Si le mode sombre est activé

  {
    bouton.innerText = "☀️";   //  // Change le texte du bouton en "Mode jour" avec une icône de soleil


  } else     // Si le mode sombre est désactivé

  {
    bouton.innerText = "🌙"; // Change le texte du bouton en "Mode nuit" avec une icône de lune

  }
}  







//page A propos


 
  document.addEventListener('DOMContentLoaded', () => {
    const counters = document.querySelectorAll('.counter');
    const speed = 25;  

    const startCount = (el) => {
      const target = +el.getAttribute('data-target');
      const update = () => {
        const current = +el.innerText;
        const inc = Math.ceil(target / 80);
        if (current < target) {
          el.innerText = current + inc;
          requestAnimationFrame(update);
        } else {
          el.innerText = target + (el.dataset.suffix || '');
        }
      };
      update();
    };

 
    const io = new IntersectionObserver((entries) => {
      entries.forEach(e => {
        if (e.isIntersecting) { startCount(e.target); io.unobserve(e.target); }
      });
    }, { threshold: 0.5 });

    counters.forEach(c => io.observe(c));
  });











//page Articles - Filtrage et recherche page articles.html


document.addEventListener('DOMContentLoaded', () => {
  const filterBtns = document.querySelectorAll('.filter-btn');
  const cards = document.querySelectorAll('.article-card');
  const searchInput = document.getElementById('search-articles');
  const articlesSection = document.getElementById('articles-section');
  let hasScrolledOnce = false; // عشان ما يكرر السْكرول كثير

  function applyFilters(options = {}) {
    const { scroll = false } = options;

    const activeFilterBtn = document.querySelector('.filter-btn.active');
    const categoryFilter = activeFilterBtn
      ? activeFilterBtn.getAttribute('data-filter')
      : 'all';

    const term = searchInput
      ? searchInput.value.trim().toLowerCase()
      : '';

    cards.forEach(card => {
      const cardCategory = card.getAttribute('data-category');
      const title = card.querySelector('h3').innerText.toLowerCase();
      const keywords = (card.getAttribute('data-keywords') || '').toLowerCase();

      const matchCategory =
        categoryFilter === 'all' || cardCategory === categoryFilter;

      const matchSearch =
        term === '' ||
        title.includes(term) ||
        keywords.includes(term);

      if (matchCategory && matchSearch) {
        card.classList.remove('d-none');
      } else {
        card.classList.add('d-none');
      }
    });

   
    if (scroll && term !== '' && articlesSection && !hasScrolledOnce) {
      articlesSection.scrollIntoView({ behavior: 'smooth' });
      hasScrolledOnce = true;
    }

 
    if (term === '') {
      hasScrolledOnce = false;
    }
  }

  
  filterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      filterBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      applyFilters({ scroll: true });
    });
  });

  
  if (searchInput) {
    searchInput.addEventListener('input', () => {
      applyFilters({ scroll: true });
    });
  }

  applyFilters();
});




// page FAQ - Recherche dans la FAQ
document.addEventListener('DOMContentLoaded', () => {
  const faqSearch = document.getElementById('faq-search');
  const faqItems = document.querySelectorAll('.faq-item');

  if (faqSearch && faqItems.length) {
    faqSearch.addEventListener('input', () => {
      const term = faqSearch.value.trim().toLowerCase();

      faqItems.forEach(item => {
        const text = item.innerText.toLowerCase();
        if (term === '' || text.includes(term)) {
          item.classList.remove('d-none');
        } else {
          item.classList.add('d-none');
        }
      });
    });
  }
});





//page Livres - Filtrage et recherche page livres_informatique.html 

document.addEventListener('DOMContentLoaded', () => {
  const livreSearch = document.getElementById('livres-search');
  const livreCards = document.querySelectorAll('.livre-card');
  const filterBtns = document.querySelectorAll('.livre-filter-btn');

  function applyLivreFilters() {
    const activeFilterBtn = document.querySelector('.livre-filter-btn.active');
    const categoryFilter = activeFilterBtn
      ? activeFilterBtn.getAttribute('data-filter')
      : 'all';

    const term = livreSearch
      ? livreSearch.value.trim().toLowerCase()
      : '';

    livreCards.forEach(card => {
      const cat = card.getAttribute('data-category');
      const text =
        card.innerText.toLowerCase() +
        ' ' +
        (card.getAttribute('data-keywords') || '').toLowerCase();

      const matchCategory =
        categoryFilter === 'all' || cat === categoryFilter;

      const matchSearch =
        term === '' || text.includes(term);

      if (matchCategory && matchSearch) {
        card.classList.remove('d-none');
      } else {
        card.classList.add('d-none');
      }
    });
  }

  
  filterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      filterBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      applyLivreFilters();
    });
  });

  
  if (livreSearch) {
    livreSearch.addEventListener('input', () => {
      applyLivreFilters();
    });
  }

   
  applyLivreFilters();
});




//page Cours - Filtrage et recherche page cours_en_communication.html ثم cours_réseaux_informatiques.html
document.addEventListener('DOMContentLoaded', () => {
  const coursFilterBtns = document.querySelectorAll('.cours-filter-btn');
  const coursCards = document.querySelectorAll('.cours-card');

  if (coursFilterBtns.length && coursCards.length) {
    function applyCoursFilters() {
      const activeBtn = document.querySelector('.cours-filter-btn.active');
      const filter = activeBtn ? activeBtn.getAttribute('data-filter') : 'all';

      coursCards.forEach(card => {
        const cat = card.getAttribute('data-category');

        const match =
          filter === 'all' ||
          cat === filter;

        if (match) {
          card.classList.remove('d-none');
        } else {
          card.classList.add('d-none');
        }
      });
    }

    coursFilterBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        coursFilterBtns.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        applyCoursFilters();
      });
    });

    applyCoursFilters();
  }
});



// recherche et filtrage dans  la page tous les cours 

document.addEventListener('DOMContentLoaded', () => {
  const tousSearch = document.getElementById('tous-cours-search');
  const tousFilterBtns = document.querySelectorAll('.tous-cours-filter-btn');
  const tousCards = document.querySelectorAll('.tous-cours-card');

  if (tousSearch && tousFilterBtns.length && tousCards.length) {

    function applyTousCoursFilters() {
      const activeBtn = document.querySelector('.tous-cours-filter-btn.active');
      const filter = activeBtn ? activeBtn.getAttribute('data-filter') : 'all';
      const term = tousSearch.value.trim().toLowerCase();

      tousCards.forEach(card => {
        const cat = card.getAttribute('data-category');
        const text = (
          card.innerText +
          ' ' +
          (card.getAttribute('data-keywords') || '')
        ).toLowerCase();

        const matchCategory = (filter === 'all' || cat === filter);
        const matchSearch = (term === '' || text.includes(term));

        if (matchCategory && matchSearch) {
          card.classList.remove('d-none');
        } else {
          card.classList.add('d-none');
        }
      });
    }

    
    tousFilterBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        tousFilterBtns.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        applyTousCoursFilters();
      });
    });

   
    tousSearch.addEventListener('input', applyTousCoursFilters);

   
    const params = new URLSearchParams(window.location.search);
    const q = params.get('q');
    if (q) {
      tousSearch.value = q;
    }

   
    applyTousCoursFilters();
  }
});
