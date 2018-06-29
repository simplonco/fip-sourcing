///??? WIP////
(function () {
   function getQuestions() {
      let app = {
         candidate_id: $('.candidate_id').val(),
         targetSelect: $('.questions-list'),
         targetAnswer: $('#container-answer'),
         targetSelectId: $('.questions-list').children(":selected").attr("id"), //won't work???
         data: '',
         init() {
            this.start();
         },
         start() {
            this.listeners();
            this.load();
         },
         listeners() {
            this.targetSelect.on('change', () => {
               console.log(this.targetSelectId) // won't work prout
            });
            //this.render(data.answers[pos].title, data.questions[pos].description)
            // onchange select -> this.render(pos)
         },
         load() {
            $.ajax({
                  type: 'get',
                  url: '/getMotivationQuestionsAndAnswers/' + this.candidate_id,
               })
               .done(data => this.renderSelect(data).bind(this))
               .fail(() => {
                  console.log("erreur")
               });
         },
         renderSelect(data) {
            this.data = data;
            console.log(data);
            this.targetSelect.find('option').remove();
            let options = data.questions.map((question, i) => {
               return `<option id="${i}" value="${question.id}"><a href="#">${question.title}</a></option>`
            });
            this.targetSelect.append(options);
         },
         render() {
            this.renderDescriptionQuestion();
            this.renderAnswer();
         },
         renderDescriptionQuestion() {
            // use of this.data.questions[pos].description
            // render -> + TODO: add description column to question table
         },
         renderAnswer() {
            this.targetAnswer.html('la réponse d');
            //something like: data.answers[pos].title
         }
      }
      app.init();
   }
   $(document).ready(function () {
      getQuestions();
   });
})()






//       let candidate_id = $('.candidate_id').val();
//       let targetSelect = $('.questions-list');
//       let targetAnswer = $('#container-answer');
//       $.ajax({
//          type: 'get',
//          url: '/getMotivationQuestionsAndAnswers/' + candidate_id,
//       }).done(data => {
//          console.log(data);
//          targetSelect.find('option').remove();
//          let options = data.questions.map((question, i) => {
//             return `<option id="${i}" value="${question.id}"><a href="#">${question.title}</a></option>`
//          });
//          targetSelect.append(options);


//          // console.log("span", targetAnswer.find('span'))
//          // targetAnswer.find('span').remove();
//          // targetAnswer.html(answers)
//       }).fail(err => {
//          console.log('Une erreur est survenue');
//       });
//    }
//    $(document).ready(getQuestions);
// })()