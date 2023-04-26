// $(function() {
  
//   var people = [];
  
//   if ($('table tbody tr').length == 0) {
//     $('#peopleList').hide();
//   }
  
  
//   $('#addPersonBtn').click(function() {
    
//     var name = $('#name').val();
    
//     var drname = $('#drname').val();
    
//     var startDate = $('#startdate').val();
    
//     var endDate = $('#enddate').val();
    
//     if (name !== "") {
      
//       var dosage = $.map($('input[name="dose"]:checked'), function(c){return c.value; })
      
//       var person = {
//         Name: name,
//         Doctor: drname,
//         StartDate: startDate,
//         EndDate: endDate,
//         Dosage: dosage,
//         // dailyDose: dailyDose,
//       }
      
//       /*$('tbody').append('<tr><td>' + person.Name + '</td><td>' + person.Gender + '</td><td>' + person.Race + '</td><td>' + person.Age + '</td><td>' + person.Height + '</td><td>' + person.Weight + '</td></tr>');*/
      
//       people.push(person);
      
//       $('#peopleList').show();
//       $('#name').val('').focus();
//       $('#drname').val('').focus();
//       $('#startdate').val('').focus();
//       $('#enddate').val('').focus();
      
//       $('tbody').empty();
      
//       for (var i = 0; i < people.length; i++) {
        
//         var person = people[i];
        
//         $('tbody').append('<tr><td>' + person.Name + '</td><td>' + person.Doctor + '</td><td>' + person.StartDate + '</td><td>' + person.EndDate + '</td><td>' + person.Dosage +'</td><td>');
        
//       }
      
//     } 
//     else {
//       if (!$('#nameContainer').find('#nameError').length) {
        
//         $("input[id='name']").after('<br /><p id="nameError">Please provide your full name.</p>');
        
//       }
      
//     }
    
//   });
  
//   $('#resetFormBtn').click(function() {
//     $('#nameError').after().remove();
//     $('#name').val('').focus();
//     $('#drName').val('').focus();
//     $('#startDate').text('');
//     $('#endDate').text('');
//   });
// });