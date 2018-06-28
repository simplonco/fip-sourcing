///??? WIP////
(function () {
   function getQuestions() {
      let candidate_id = $('.candidate_id').val();
      console.log(candidate_id);
      $.ajax({
         type: 'get',
         url: '/getMotivationQuestionsAndAnswers/'+candidate_id,
      }).done(data => {
         let target = $('select [questions-list]');
         target.find('option').remove();
         let options = data.questions.map(question => {
            return `<option value="${questions.id}"><a href="#">${question.title}</a></option>`
         });
         target.append(options);
      }).fail(err => {
         console.log('Une erreur est survenue');
      });
   }
})()