<script type="text/javascript">

    window.onload = function () {
        var overview = document.querySelector('.overview');
        var courseContent = document.querySelector('.coursecontent');
        var benefits = document.querySelector('.benefits');
        var whoattends = document.querySelector('.whoattends');
        var trainers = document.querySelector('.trainers');
        var faqs = document.querySelector('.FAQs');

        var content_1 = document.querySelector('#content_1');
        var content_2 = document.querySelector('#content_2');
        var content_3 = document.querySelector('#content_3');
        var content_4 = document.querySelector('#content_4');
        var content_5 = document.querySelector('#content_5');
        var content_6 = document.querySelector('#content_6');

        var menuList = document.querySelectorAll('.plan_menu li a');



        overview.addEventListener('click', function (e) {
            addActiveClass(menuList);
            document.querySelector('.overview a').classList.add('active');
            display(content_1);
            hide(content_2);
            hide(content_3);
            hide(content_4);
            hide(content_5);
            hide(content_6);
        });

        courseContent.addEventListener('click', function (e) {
            addActiveClass(menuList);
            document.querySelector('.coursecontent a').classList.add('active');
            display(content_2);
            hide(content_1);
            hide(content_3);
            hide(content_4);
            hide(content_5);
            hide(content_6);
        });

        benefits.addEventListener('click', function (e) {
            addActiveClass(menuList);
            document.querySelector('.benefits a').classList.add('active');
            display(content_3);
            hide(content_1);
            hide(content_2);
            hide(content_4);
            hide(content_5);
            hide(content_6);
        });

        whoattends.addEventListener('click', function (e) {
            addActiveClass(menuList);
            document.querySelector('.whoattends a').classList.add('active');
            display(content_4);
            hide(content_1);
            hide(content_2);
            hide(content_3);
            hide(content_5);
            hide(content_6);
        });

        trainers.addEventListener('click', function (e) {
            addActiveClass(menuList);
            document.querySelector('.trainers a').classList.add('active');
            display(content_5);
            hide(content_1);
            hide(content_2);
            hide(content_3);
            hide(content_4);
            hide(content_6);
        });

        faqs.addEventListener('click', function (e) {
            addActiveClass(menuList);
            document.querySelector('.FAQs a').classList.add('active');
            display(content_6);
            hide(content_1);
            hide(content_2);
            hide(content_3);
            hide(content_4);
            hide(content_5);
        });
        function display(element) {
            element.style.display = 'block';
        }

        function hide(element) {
            element.style.display = 'none';
        }

        function addActiveClass(theList) {
            theList.forEach(link => {
                if (link.className === 'active') {
                    link.classList.remove("active");
                }
            });
        }
    };


</script>
