const questions = document.querySelectorAll('.question');
questions.forEach(function(h2){
    console.log(h2 );
    const btn = h2.querySelector('.btn');
    console.log(btn);
    btn.addEventListener("click",function(item){
        h2.classList.toggle("show-text");
    })

})
