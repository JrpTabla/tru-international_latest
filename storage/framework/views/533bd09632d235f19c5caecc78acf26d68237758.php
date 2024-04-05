

<?php $__env->startSection('content'); ?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
<link rel="stylesheet" href="<?php echo e(asset ('assets/css/RPP/index.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset ('assets/css/education/ec-landing-section.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset ('assets/css/education/ec-second-section.css')); ?>">

<div class="main">
    <section id="ec-landing-section" class="ec-landing-section">
        <div class="ec-landing-section-container w-100 mx-auto">
            <div class="ec-landing-section-first-div my-auto">
                <div class="d-flex my-auto">
                    <a class="breadcrumb-nav-link topic-nav-link"></a>
                    <div class="breadcrumb-nav-divider">
                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="16" viewBox="0 0 9 16" fill="none">
                            <path d="M8.70711 7.29289C9.09763 7.68342 9.09763 8.31658 8.70711 8.70711L2.34315 15.0711C1.95262 15.4616 1.31946 15.4616 0.928932 15.0711C0.538408 14.6805 0.538408 14.0474 0.928932 13.6569L6.58579 8L0.928932 2.34315C0.538408 1.95262 0.538408 1.31946 0.928932 0.928932C1.31946 0.538408 1.95262 0.538408 2.34315 0.928932L8.70711 7.29289ZM8 9H7V7H8V9Z" fill="#A7A7A7"/>
                        </svg>
                    </div>
                    <a class="breadcrumb-nav-link difficulty-nav-link"></a>
                    <div class="breadcrumb-nav-divider">
                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="16" viewBox="0 0 9 16" fill="none">
                            <path d="M8.70711 7.29289C9.09763 7.68342 9.09763 8.31658 8.70711 8.70711L2.34315 15.0711C1.95262 15.4616 1.31946 15.4616 0.928932 15.0711C0.538408 14.6805 0.538408 14.0474 0.928932 13.6569L6.58579 8L0.928932 2.34315C0.538408 1.95262 0.538408 1.31946 0.928932 0.928932C1.31946 0.538408 1.95262 0.538408 2.34315 0.928932L8.70711 7.29289ZM8 9H7V7H8V9Z" fill="#A7A7A7"/>
                        </svg>
                    </div>
                    <div class="breadcrumb-nav-link fw-bold course-nav-link"></div>
                </div>
                <div class="course-title-page"></div>
            </div>
        </div>
    </section>

    <section id="ec-second-section" class="ec-second-section">
        <div class="ec-second-section-container w-100 mx-auto">
            <div class="ec-second-section-first-div w-100 mx-auto">
                <div class="accordion accordion-flush" id="accordion"></div>
                <div class="ec-second-section-Next d-flex">
                <div class="ms-auto">Next Course</div>
                <svg class="my-auto " xmlns="http://www.w3.org/2000/svg" width="15" height="26" viewBox="0 0 15 26" fill="none">
                    <path d="M14.2374 14.2374C14.9209 13.554 14.9209 12.446 14.2374 11.7626L3.1005 0.625631C2.41709 -0.057786 1.30905 -0.057786 0.625631 0.625631C-0.057786 1.30905 -0.057786 2.41709 0.625631 3.1005L10.5251 13L0.625631 22.8995C-0.057786 23.5829 -0.057786 24.691 0.625631 25.3744C1.30905 26.0578 2.41709 26.0578 3.1005 25.3744L14.2374 14.2374ZM12 14.75H13V11.25H12V14.75Z" fill="black"/>
                </svg>
                </div>
            </div>
        </div>
    </section>
</div>


<script>

    const url = window.location.href;
    const urlSegments = url.split("/");
    const course_Id = urlSegments[urlSegments.length - 1];

    document.addEventListener("DOMContentLoaded", () => {
        handleCourseData();
        handleModuleData();
    });

    function handleCourseData() {
        fetch(`/api/page-education-course/${course_Id}`)
            .then(response => response.json())
            .then(data => {
                console.log(data);
                const courseTitle = document.querySelector('.course-title-page');
                const topicLink = document.querySelector('.topic-nav-link');
                const difficultyLink = document.querySelector('.difficulty-nav-link');
                const difficultyCourse = document.querySelector('.course-nav-link');

                courseTitle.textContent = `Course: ${data.name_course}`;
                topicLink.textContent = `${data.name_topic}`;
                topicLink.href = `/education/${data.hashed_topic_id}`;
                difficultyLink.textContent = `${data.name_level}`;
                difficultyLink.href = `/education/${data.hashed_topic_id}`;
                difficultyCourse.textContent = `${data.name_course}`;

            })
        .catch(error => console.error('Error fetching course:', error));
    }

    function handleModuleData() {
        fetch(`/api/view-education-module/${course_Id}`)
            .then(response => response.json())
            .then(data => {
                console.log(data);
                const accordionContainer = document.querySelector('.accordion');
                accordionContainer.innerHTML = ''; 
                
                data.forEach(module => {
                    const moduleId = module.id; 
                    
                    fetch(`/api/view-education-lesson/${moduleId}`)
                        .then(response => response.json())
                        .then(lessons => {
                            if (lessons.length > 0) {
                                const accordionItem = document.createElement('div');
                                accordionItem.classList.add('accordion-item');
                                const itemId = module.id; 
                                accordionItem.innerHTML = `
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-${itemId}" aria-expanded="false" aria-controls="flush-collapse-${itemId}">
                                            <div class="accordion-text">
                                                <div class="Module-item-title">Module: ${module.name_module}</div>
                                                <div class="Module-item-description d-flex" id="module-description-${itemId}">5 Lesson | 34 Minutes | Beginner</div>
                                            </div>
                                        </button>
                                    </h2>
                                    <div id="flush-collapse-${itemId}" class="accordion-collapse collapse" data-bs-parent="#accordion-${itemId}">
                                        <div class="accordion-body">
                                        </div>
                                    </div>
                                `;
                                accordionContainer.appendChild(accordionItem);
                                handleLessonData(module.id, itemId);
                            }
                        })
                    .catch(error => console.error('Error fetching lessons:', error));
                });
            })
        .catch(error => console.error('Error fetching education topics:', error));
    }


    function handleLessonData(Module_id, itemId) {
        fetch(`/api/view-education-lesson/${Module_id}`)
            .then(response => response.json())
            .then(data => {
                const accordionBody = document.querySelector(`#flush-collapse-${itemId} .accordion-body`);
                const moduleDescription = document.getElementById(`module-description-${itemId}`);

                let totalMinutes = 0;
                data.forEach(lesson => {
                    totalMinutes += parseInt(lesson.time_lesson);
                });

                const lessonAdsDiv = document.createElement('div');
                lessonAdsDiv.classList.add('lesson-ads', 'mx-auto');
                accordionBody.appendChild(lessonAdsDiv);

                const totalLessons = data.length;
                moduleDescription.textContent = `${totalLessons} Lesson | ${totalMinutes} Minutes |`;

                data.forEach(lesson => {
                    const lessonDiv = document.createElement('div');
                    lessonDiv.classList.add('d-flex', 'lesson-div');
                    lessonDiv.innerHTML = `
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                            <circle opacity="0.2" cx="16" cy="16" r="16" transform="rotate(90 16 16)"/>
                            <path d="M12.7595 25.0455C12.2654 25.4698 11.515 25.4202 11.083 24.9353C10.6514 24.45 10.7019 23.713 11.1957 23.2887L19.6767 16.0008L11.1952 8.71254C10.701 8.28829 10.651 7.5513 11.0825 7.06639C11.5145 6.58104 12.2649 6.53148 12.7591 6.95573L22.262 15.1224C22.5199 15.3437 22.6679 15.6642 22.6679 16.0008C22.6679 16.3375 22.5199 16.6575 22.262 16.8793L12.7595 25.0455Z"/>
                        </svg>
                        <div class="Lesson-title" onclick="GoToLesson(${lesson.id})">Lesson: ${lesson.name_lesson}</div>
                        <div class="Lesson-time ms-auto">${lesson.time_lesson} Minutes</div>
                    `;
                    accordionBody.insertBefore(lessonDiv, lessonAdsDiv);
                });
            })
        .catch(error => console.error('Error fetching lessons:', error));
    }

    function GoToLesson(lesson_id) {

        window.location.href = `/education_lesson/${lesson_id}`;

    }

</script>

<!-- Create a According for each Data -->

<!-- 
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-123" aria-expanded="false" aria-controls="flush-collapse-123">
                <div class="accordion-text">
                    <div class="Module-item-title">Module: What is forex?</div>
                    <div class="Module-item-description d-flex">5 Lesson | 34 Minutes | Beginner</div>
                </div>
            </button>
        </h2>
        <div id="flush-collapse-123" class="accordion-collapse collapse" data-bs-parent="#flush-collapse-123">
            <div class="accordion-body">
                <div class="d-flex lesson-div">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                        <circle opacity="0.2" cx="16" cy="16" r="16" transform="rotate(90 16 16)"/>
                        <path d="M12.7595 25.0455C12.2654 25.4698 11.515 25.4202 11.083 24.9353C10.6514 24.45 10.7019 23.713 11.1957 23.2887L19.6767 16.0008L11.1952 8.71254C10.701 8.28829 10.651 7.5513 11.0825 7.06639C11.5145 6.58104 12.2649 6.53148 12.7591 6.95573L22.262 15.1224C22.5199 15.3437 22.6679 15.6642 22.6679 16.0008C22.6679 16.3375 22.5199 16.6575 22.262 16.8793L12.7595 25.0455Z"/>
                    </svg>
                    <div class="Lesson-title">Lesson: What is Forex</div>
                    <div class="Lesson-time ms-auto"> 6 Minutes</div>
                </div>

                <div class="d-flex lesson-div">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                        <circle opacity="0.2" cx="16" cy="16" r="16" transform="rotate(90 16 16)"/>
                        <path d="M12.7595 25.0455C12.2654 25.4698 11.515 25.4202 11.083 24.9353C10.6514 24.45 10.7019 23.713 11.1957 23.2887L19.6767 16.0008L11.1952 8.71254C10.701 8.28829 10.651 7.5513 11.0825 7.06639C11.5145 6.58104 12.2649 6.53148 12.7591 6.95573L22.262 15.1224C22.5199 15.3437 22.6679 15.6642 22.6679 16.0008C22.6679 16.3375 22.5199 16.6575 22.262 16.8793L12.7595 25.0455Z" />
                    </svg>
                    <div class="Lesson-title">Lesson: What is Forex</div>
                    <div class="Lesson-time ms-auto"> 6 Minutes</div>
                </div>

                <div class="lesson-ads mx-auto"></div>
            </div>
        </div>
    </div>
-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('header.subpage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin-IT\Desktop\tru-international\tru-international_latest\resources\views/pages/education/educationModule.blade.php ENDPATH**/ ?>