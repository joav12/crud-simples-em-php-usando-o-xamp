$('.delete').click(function() {
    $.ajax({
      type: "POST",
      url: "../phps/preencheDeletaDB.php",
      data: { id: this.id }
    })
  });