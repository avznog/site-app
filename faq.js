const questions = document.querySelectorAll('.faq-question');
questions.forEach(function(QUE){
    console.log(QUE );
    const btn = QUE.querySelector('.btn');
    console.log(btn);
    btn.addEventListener("click",function(item){
        QUE.classList.toggle("show-text");
    })
})
