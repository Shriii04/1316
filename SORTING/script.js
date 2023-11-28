$(document).ready(function() {
    const unsortedSelect = $('#unsortedSelect');
    const sortedSelect = $('#sortedSelect');
    const addButton = $('#addButton');
    const sortButton = $('#sortButton');
  
    addButton.on('click', function() {
      const numberInput = $('#numberInput');
      const number = parseFloat(numberInput.val());
  
      if (!isNaN(number)) {
        const option = $('<option></option>').text(number);
        unsortedSelect.append(option);
        numberInput.val('');
      }
    });
  
    sortButton.on('click', function() {
      const numbers = unsortedSelect.find('option').map(function() {
        return parseFloat($(this).text());
      }).get();
  
      numbers.sort((a, b) => a - b);
  
      sortedSelect.empty();
      numbers.forEach(function(number) {
        const option = $('<option></option>').text(number);
        sortedSelect.append(option);
      });
    });
  });
  