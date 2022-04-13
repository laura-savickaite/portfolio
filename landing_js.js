
document.addEventListener('DOMContentLoaded', function loaded() {


    var projects = document.getElementById('projects');
    let projectsLi = projects.querySelectorAll('li');

    let options = {

        //l'item avec rootmargin dit à quel moment du viewport l'objet doit apparaitre le threshold dit où il doit apparaitre (lorsqu'il est entièrement présent dans le viewport 1.0 ou pas avec 0.0)
        rootMargin: '0%',
        threshold: 0.0
    }

    // if isintersecting = true (dans console) alors notre objet est dans le viewport sinon non
    let observer = new IntersectionObserver(showItem, options);

    function showItem(entries){
        entries.forEach(entry =>{
            if(entry.isIntersecting){
                let letters = [...entry.target.querySelectorAll('span')];
                letters.forEach((letter, idx) => {
                    setTimeout(() => {
                        letter.classList.add('active')
                    }, idx * 10)
                })
                entry.target.children[0].classList.add('active');
            }
        })
    }

    projectsLi.forEach(element => {

        //je créé une nouvelle string, et dans cette nouvelle string, je map out les lettres choppés dans itenText(1), si la lettre == à un espace, je rajoute entre un espace SINON tu rajoute une span avec la lettre correspondante 
        let newString = '';
        var itemText = element.children[0].innerText.split('');
        
        itemText.map(letter => (newString += letter == ' ' ? `<span class="gap"></span>` : `<span>${letter}</span>`));
        element.innerHTML = newString;
        console.log(newString)
        // console.log(itemText)
        // console.log(itemText1)

        observer.observe(element);
        // window.addEventListener('scroll', function(){
        // element.classList.add('active');
    // })  
    });


    var test = document.getElementsByClassName('img2');
    var truc = test[0];
    new simpleParallax(truc, {
        scale: 1.6,
        orientation: 'left'
    });

})

