///??? WIP////
(function () {
   function getQuestions() {
      $.ajax({
         type: 'get',
         url: '/getMotivationQuestionsAndAnswers',
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