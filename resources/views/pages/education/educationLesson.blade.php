@extends('header.subpage')

@section('content')
<link rel="stylesheet" href="{{ asset ('assets/css/RPP/index.css') }}">
<link rel="stylesheet" href="{{ asset ('assets/css/education/el-landing-section.css') }}">
<link rel="stylesheet" href="{{ asset ('assets/css/education/el-second-section.css') }}">

<style>
    .content-div li {
        line-height: 36px;
    }
    
    .content-div ul {
        margin-left: 54px;
    }

    figure {
        display: flex;  
    }

    .content-div img {
        margin: auto;
    }
</style>

<div class="main">
    <section id="el-landing-section" class="el-landing-section">
        <div class="el-landing-section-container w-100 mx-auto">
            <div class="el-landing-section-first-div">
                <div class="d-flex my-auto">
                    <a class="breadcrumb-nav-link topic-nav-link">Forex</a>
                    <div class="breadcrumb-nav-divider">
                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="16" viewBox="0 0 9 16" fill="none">
                            <path d="M8.70711 7.29289C9.09763 7.68342 9.09763 8.31658 8.70711 8.70711L2.34315 15.0711C1.95262 15.4616 1.31946 15.4616 0.928932 15.0711C0.538408 14.6805 0.538408 14.0474 0.928932 13.6569L6.58579 8L0.928932 2.34315C0.538408 1.95262 0.538408 1.31946 0.928932 0.928932C1.31946 0.538408 1.95262 0.538408 2.34315 0.928932L8.70711 7.29289ZM8 9H7V7H8V9Z" fill="#A7A7A7"/>
                        </svg>
                    </div>
                    <a class="breadcrumb-nav-link difficulty-nav-link">Intermediate</a>
                    <div class="breadcrumb-nav-divider">
                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="16" viewBox="0 0 9 16" fill="none">
                            <path d="M8.70711 7.29289C9.09763 7.68342 9.09763 8.31658 8.70711 8.70711L2.34315 15.0711C1.95262 15.4616 1.31946 15.4616 0.928932 15.0711C0.538408 14.6805 0.538408 14.0474 0.928932 13.6569L6.58579 8L0.928932 2.34315C0.538408 1.95262 0.538408 1.31946 0.928932 0.928932C1.31946 0.538408 1.95262 0.538408 2.34315 0.928932L8.70711 7.29289ZM8 9H7V7H8V9Z" fill="#A7A7A7"/>
                        </svg>
                    </div>
                    <a class="breadcrumb-nav-link Course-nav-link">Course</a>
                    <div class="breadcrumb-nav-divider">
                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="16" viewBox="0 0 9 16" fill="none">
                            <path d="M8.70711 7.29289C9.09763 7.68342 9.09763 8.31658 8.70711 8.70711L2.34315 15.0711C1.95262 15.4616 1.31946 15.4616 0.928932 15.0711C0.538408 14.6805 0.538408 14.0474 0.928932 13.6569L6.58579 8L0.928932 2.34315C0.538408 1.95262 0.538408 1.31946 0.928932 0.928932C1.31946 0.538408 1.95262 0.538408 2.34315 0.928932L8.70711 7.29289ZM8 9H7V7H8V9Z" fill="#A7A7A7"/>
                        </svg>
                    </div>
                    <a class="breadcrumb-nav-link Module-nav-link">Module</a>
                    <div class="breadcrumb-nav-divider">
                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="16" viewBox="0 0 9 16" fill="none">
                            <path d="M8.70711 7.29289C9.09763 7.68342 9.09763 8.31658 8.70711 8.70711L2.34315 15.0711C1.95262 15.4616 1.31946 15.4616 0.928932 15.0711C0.538408 14.6805 0.538408 14.0474 0.928932 13.6569L6.58579 8L0.928932 2.34315C0.538408 1.95262 0.538408 1.31946 0.928932 0.928932C1.31946 0.538408 1.95262 0.538408 2.34315 0.928932L8.70711 7.29289ZM8 9H7V7H8V9Z" fill="#A7A7A7"/>
                        </svg>
                    </div>
                    <div class="breadcrumb-nav-link fw-bold Lesson-nav-link">Lesson</div>
                </div>
                <div class="lesson-title-page"></div>
                <div class="lesson-publish-date"></div>
                <div class="lesson-update-readTime d-flex">
                    <div class="lesson-update-date"></div>
                    <svg class="my-auto mx-2" xmlns="http://www.w3.org/2000/svg" width="6" height="6" viewBox="0 0 6 6" fill="none">
                        <circle cx="3" cy="3" r="3" fill="#878787"/>
                    </svg>
                    <div class="lesson-reading-time"></div>
                </div>
            </div>
        </div>
    </section>

    <section id="el-second-section" class="el-second-section">
        <div class="el-second-section-container w-100 mx-auto">
            <div class="el-second-section-first-div w-100 mx-auto row">
                <div class="highlight-div col-2">
                    <div class="highlight-div-title-text">
                        Lesson Highlights
                    </div>
                        <div class="highlight-div-lesson-highlight d-flex">
                        <svg class="" xmlns="http://www.w3.org/2000/svg" width="15" height="18" viewBox="0 0 15 18" fill="none">
                            <path d="M15 9L0 0.339745L0 17.6603L15 9Z" fill="#F28E61"/>
                        </svg>
                        <div class="highlight-div-lesson-title">What’s a Japanese Candlesticks</div>
                    </div>
                    <div class="highlight-div-lesson-content">
                        <div class="highlight-div-lesson-content-text">Parts of a Japanese Candlesticks</div>
                    </div>
                </div>
                <div class="content-div col-8"></div>
                <div class="ads-div col-2">
                    <div class="education-lesson-ads"></div>
                    <div class="education-lesson-ads"></div>
                </div>
            </div>
        </div>
    </section>
</div>


<script>

    const url = window.location.href;
    const urlSegments = url.split("/");
    const lesson_Id = urlSegments[urlSegments.length - 1];

    document.addEventListener("DOMContentLoaded", () => {
        handleLessonData();
        /* handleModuleData(); */
    });

    function formatDateMMDDYYYY(dateString) {
        const date = new Date(dateString);
        const month = date.getMonth() + 1; // Months are zero indexed
        const day = date.getDate();
        const year = date.getFullYear();
        return `${month < 10 ? '0' : ''}${month}-${day < 10 ? '0' : ''}${day}-${year}`;
    }

    // Function to format date as Month Day, Year
    function formatDateMonthDayYear(dateString) {
        const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        const date = new Date(dateString);
        const month = months[date.getMonth()];
        const day = date.getDate();
        const year = date.getFullYear();
        return `${month} ${day}, ${year}`;
    }

    function handleLessonData() {
        fetch(`/api/page-education-lesson/${lesson_Id}`)
            .then(response => response.json())
            .then(data => {
                console.log(data);

                 // Update lesson title
                const lessonTitle = document.querySelector('.lesson-title-page');
                lessonTitle.textContent = data.name_lesson;

                // Update publish date

                // Update publish date
                const publishDate = document.querySelector('.lesson-publish-date');
                publishDate.textContent = `Date Published: ${formatDateMonthDayYear(data.created_date)}`;

                // Update last updated date
                const updateDate = document.querySelector('.lesson-update-date');
                updateDate.textContent = `Last Updated: ${formatDateMonthDayYear(data.updated_date)}`;


                const readingTime = document.querySelector('.lesson-reading-time');
                readingTime.textContent = `${data.time_lesson} Minute Read`;


                const contentDiv = document.querySelector('.content-div');
                contentDiv.innerHTML = data.content_lesson;


               
               
            })
        .catch(error => console.error('Error fetching course:', error));
    }

    // function handleModuleData() {
    //     fetch(`/api/view-education-module/${course_Id}`)
    //         .then(response => response.json())
    //         .then(data => {
    //             console.log(data);
    //             const accordionContainer = document.querySelector('.accordion');
    //             accordionContainer.innerHTML = ''; 
                
    //             data.forEach(module => {
    //                 const moduleId = module.id; 
                    
    //                 fetch(`/api/view-education-lesson/${moduleId}`)
    //                     .then(response => response.json())
    //                     .then(lessons => {
    //                         if (lessons.length > 0) {
    //                             const accordionItem = document.createElement('div');
    //                             accordionItem.classList.add('accordion-item');
    //                             const itemId = module.id; 
    //                             accordionItem.innerHTML = `
    //                                 <h2 class="accordion-header">
    //                                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-${itemId}" aria-expanded="false" aria-controls="flush-collapse-${itemId}">
    //                                         <div class="accordion-text">
    //                                             <div class="Module-item-title">Module: ${module.name_module}</div>
    //                                             <div class="Module-item-description d-flex" id="module-description-${itemId}">5 Lesson | 34 Minutes | Beginner</div>
    //                                         </div>
    //                                     </button>
    //                                 </h2>
    //                                 <div id="flush-collapse-${itemId}" class="accordion-collapse collapse" data-bs-parent="#accordion-${itemId}">
    //                                     <div class="accordion-body">
    //                                     </div>
    //                                 </div>
    //                             `;
    //                             accordionContainer.appendChild(accordionItem);
    //                             handleLessonData(module.id, itemId);
    //                         }
    //                     })
    //                 .catch(error => console.error('Error fetching lessons:', error));
    //             });
    //         })
    //     .catch(error => console.error('Error fetching education topics:', error));
    // }


    // function handleLessonData(Module_id, itemId) {
    //     fetch(`/api/view-education-lesson/${Module_id}`)
    //         .then(response => response.json())
    //         .then(data => {
    //             const accordionBody = document.querySelector(`#flush-collapse-${itemId} .accordion-body`);
    //             const moduleDescription = document.getElementById(`module-description-${itemId}`);

    //             let totalMinutes = 0;
    //             data.forEach(lesson => {
    //                 totalMinutes += parseInt(lesson.time_lesson);
    //             });

    //             const lessonAdsDiv = document.createElement('div');
    //             lessonAdsDiv.classList.add('lesson-ads', 'mx-auto');
    //             accordionBody.appendChild(lessonAdsDiv);

    //             const totalLessons = data.length;
    //             moduleDescription.textContent = `${totalLessons} Lesson | ${totalMinutes} Minutes |`;

    //             data.forEach(lesson => {
    //                 const lessonDiv = document.createElement('div');
    //                 lessonDiv.classList.add('d-flex', 'lesson-div');
    //                 lessonDiv.innerHTML = `
    //                     <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
    //                         <circle opacity="0.2" cx="16" cy="16" r="16" transform="rotate(90 16 16)"/>
    //                         <path d="M12.7595 25.0455C12.2654 25.4698 11.515 25.4202 11.083 24.9353C10.6514 24.45 10.7019 23.713 11.1957 23.2887L19.6767 16.0008L11.1952 8.71254C10.701 8.28829 10.651 7.5513 11.0825 7.06639C11.5145 6.58104 12.2649 6.53148 12.7591 6.95573L22.262 15.1224C22.5199 15.3437 22.6679 15.6642 22.6679 16.0008C22.6679 16.3375 22.5199 16.6575 22.262 16.8793L12.7595 25.0455Z"/>
    //                     </svg>
    //                     <div class="Lesson-title" onclick="GoToLesson(${lesson.id})">Lesson: ${lesson.name_lesson}</div>
    //                     <div class="Lesson-time ms-auto">${lesson.time_lesson} Minutes</div>
    //                 `;
    //                 accordionBody.insertBefore(lessonDiv, lessonAdsDiv);
    //             });
    //         })
    //     .catch(error => console.error('Error fetching lessons:', error));
    // }

    // function GoToLesson(lesson_id) {

    //     window.location.href = `/education_lesson/${lesson_id}`;

    // }

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

@endsection