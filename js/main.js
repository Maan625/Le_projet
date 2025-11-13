function changerMode() {
  const body = document.body; // Récupère l'élément <body> de la page

  const bouton = document.getElementById('modeButton'); // Récupère le bouton avec l'ID "modeButton"



  body.classList.toggle("dark-mode");  // Ajoute la classe "dark-mode" si elle n'existe pas, ou la supprime si elle existe déjà


  if (body.classList.contains("dark-mode"))   // Si le mode sombre est activé

  {
    bouton.innerText = "☀️ Mode jour";   //  // Change le texte du bouton en "Mode jour" avec une icône de soleil


  } else     // Si le mode sombre est désactivé

  {
    bouton.innerText = "🌙 Mode nuit"; // Change le texte du bouton en "Mode nuit" avec une icône de lune

  }
} //Résumé :Cett







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











  // page articles techniques

//   document.addEventListener('DOMContentLoaded', () => {
//   const filterBtns = document.querySelectorAll('.filter-btn');
//   const cards = document.querySelectorAll('.article-card');
//   const searchInput = document.getElementById('search-articles');

//   // فلترة حسب الفئة (5G, fibre, réseaux...)
//   filterBtns.forEach(btn => {
//     btn.addEventListener('click', () => {
//       const filter = btn.getAttribute('data-filter');

//       // active button style
//       filterBtns.forEach(b => b.classList.remove('active'));
//       btn.classList.add('active');

//       cards.forEach(card => {
//         const category = card.getAttribute('data-category');
//         if (filter === 'all' || category === filter) {
//           card.classList.remove('d-none');
//         } else {
//           card.classList.add('d-none');
//         }
//       });

//       // بعد تغيير الفلتر، نطبّق البحث أيضاً إن كان فيه نص
//       if (searchInput && searchInput.value.trim() !== '') {
//         applySearch(searchInput.value.trim().toLowerCase(), cards);
//       }
//     });
//   });

//   // بحث نصي في العناوين والكلمات المفتاحية
//   function applySearch(term, cardsNodeList){
//     cardsNodeList.forEach(card => {
//       const title = card.querySelector('h3').innerText.toLowerCase();
//       const keywords = (card.getAttribute('data-keywords') || '').toLowerCase();
//       const hiddenByCategory = card.classList.contains('d-none');
//       if (hiddenByCategory) return; // لا نعدل كارت مخفي من الفلتر

//       if (title.includes(term) || keywords.includes(term)) {
//         card.style.opacity = '1';
//       } else {
//         card.style.opacity = '0.25';
//       }
//     });
//   }

//   if (searchInput) {
//     searchInput.addEventListener('input', (e) => {
//       const term = e.target.value.trim().toLowerCase();
//       // إعادة الشفافية الافتراضية
//       cards.forEach(c => c.style.opacity = '1');

//       if (term.length >= 2) {
//         applySearch(term, cards);
//       }
//     });
//   }
// });


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

    // سكرول ناعم لأسفل عند وجود كلمة بحث
    if (scroll && term !== '' && articlesSection && !hasScrolledOnce) {
      articlesSection.scrollIntoView({ behavior: 'smooth' });
      hasScrolledOnce = true;
    }

    // لو المستخدم مسح البحث نرجع نسمح بالسكرول مرة ثانية
    if (term === '') {
      hasScrolledOnce = false;
    }
  }

  // أزرار الفلتر
  filterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      filterBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      applyFilters({ scroll: true });
    });
  });

  // البحث: نفلتر مباشرة، ومع أول كتابة حقيقية ننزل للأسفل
  if (searchInput) {
    searchInput.addEventListener('input', () => {
      applyFilters({ scroll: true });
    });
  }

  applyFilters();
});
