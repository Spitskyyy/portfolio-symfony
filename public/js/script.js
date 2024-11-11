// Ouvrir la modale
function openModal() {
    document.getElementById("modal").style.display = "flex";
  }
  
  // Fermer la modale
  function closeModal() {
    document.getElementById("modal").style.display = "none";
  }
  
  // Fermer la modale en cliquant en dehors du contenu
  window.onclick = function(event) {
    const modal = document.getElementById("modal");
    if (event.target === modal) {
      closeModal();
    }
  }
  