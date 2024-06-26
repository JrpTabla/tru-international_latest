@extends('header.subpage')

@section('content')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
<link rel="stylesheet" href="{{ asset ('assets/css/RPP/index.css') }}">
<link rel="stylesheet" href="{{ asset ('assets/css/education/landing-section.css') }}">

<div class="main">
    <section id="ep-landing-section" class="ep-landing-section">
        <div class="ep-landing-section-container row mx-auto">
            <div class="ep-landing-section-first-div">
                <div class="ep-landing-section-title text-center">Trade Geek</div>
                <div class="ep-landing-section-sub-title text-center">Because learning is <span>earning</span></div>
                <div class=" education-division">
                    <div class="row education-level justify-content-center"></div>
                    <div class="row education-course">
                        <div class="row education-course-container justify-content-center"></div>
                        <div class="education-course-btn-container">
                            <button type="button" class="btn education-btn mx-auto">See More...</button>
                        </div>
                    </div>
                    <div class="w-100 d-flex education-course-ads-container">
                        <div class="education-ads m-auto"></div>
                    </div>
                </div>

                <div class="education-test">
                    <div class="ep-landing-section-test-text-title text-center">Test Your Knowledge</div>
                    <div class="ep-landing-section-test-text-description text-center mx-auto">Think you’re ready to put your knowledge to the test? Answer these quizzes and get rewards!</div>
                    <div class="ep-landing-section-test-img d-flex">
                        <img src="{{ asset ('assets/images/EP-images/education-course-page/test-img.png') }}" alt="" class="mx-auto">
                    </div>
                    <div class="education-test-btn-container">
                        <button type="button" class="btn education-btn mx-auto">Take the Quiz!</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script>

    const url = window.location.href;
    const urlSegments = url.split("/");
    const topic_name = urlSegments[urlSegments.length - 1];
    let topic_id;

    document.addEventListener("DOMContentLoaded", () => {
        handleDifficultyData();
        // handleTopicData();
            selectedDifficultyValue(0);
    });

    function handleDifficultyData() {
        const selectElement = document.getElementById('education-topic-selection');
        const educationLevelContainer = document.querySelector('.education-level');

        const allModulesNav = document.createElement('div');
        allModulesNav.classList.add('col-2', 'difficulty-nav', 'difficulty-actived');
        allModulesNav.addEventListener('click', () => {
            selectedDifficultyValue(0); 

            document.querySelectorAll('.difficulty-nav').forEach(nav => {
                nav.classList.remove('difficulty-actived');
            });

            allModulesNav.classList.add('difficulty-actived');
        });

        const allModulesText = document.createElement('div');
        allModulesText.classList.add('education-level-text-first', 'text-center');
        allModulesText.textContent = "All Modules";

        allModulesNav.appendChild(allModulesText);
        educationLevelContainer.appendChild(allModulesNav);

        fetch(`/api/retrieve-education-level`)
            .then(response => response.json())
            .then(data => {

                data.forEach(item => {
                    const newDifficultyNav = document.createElement('div');
                    newDifficultyNav.classList.add('col-2', 'difficulty-nav');
                    newDifficultyNav.addEventListener('click', () => {
                        selectedDifficultyValue(item.id);

                        document.querySelectorAll('.difficulty-nav').forEach(nav => {
                            nav.classList.remove('difficulty-actived');
                        });
                        newDifficultyNav.classList.add('difficulty-actived');
                    });

                    const newEducationLevelText = document.createElement('div');
                    newEducationLevelText.classList.add('education-level-text', 'text-center');
                    newEducationLevelText.textContent = item.name_level;

                    newDifficultyNav.appendChild(newEducationLevelText);
                    educationLevelContainer.appendChild(newDifficultyNav);
                });
            })
            .catch(error => console.error('Error fetching education topics:', error));
    }

    function selectedDifficultyValue(difficulty_id) {

        fetch(`/api/retrieve-education-topic-id/${topic_name}`)
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            const topic_id = data.hashed_id;
            HandleDataCourseTable(topic_id, difficulty_id);
        })
        .catch(error => {
            console.error('Error fetching education topics:', error);
            alert('An error occurred while fetching education topics. Please try again later.');
            window.location.href = "/tradegeek/Forex";
        });



    }


    function HandleDataCourseTable(topic_id, difficulty_id) {
        fetch(`/api/view-education-course/${topic_id}/${difficulty_id}`)
            .then(response => response.json())
            .then(data => {
                /* console.log(data); */
                const container = document.querySelector('.education-course-container');
                container.innerHTML = '';
                
                if (data.length === 0) {
                    const courseDiv = document.createElement('div');
                    courseDiv.classList.add('education-course-div', 'col-3');
                    courseDiv.innerHTML = `
                        <div class="education-course-card p-3">
                            <div class="education-course-item">
                                <div class="education-course-card-img mx-auto">
                                    <img src="https://img.icons8.com/color/96/teaching.png" alt="teaching"/>
                                </div>
                                <div class="education-course-card-text mx-auto text-center">
                                    Coming soon..
                                </div>
                            </div>
                        </div>
                    `;
                    container.appendChild(courseDiv);
                } else {
                    data.forEach(course => {
                        const courseDiv = document.createElement('div');
                        courseDiv.classList.add('education-course-div', 'col-3');
                        courseDiv.innerHTML = `
                            <div class="education-course-card p-3">
                                <div class="education-course-item" onclick="GoToCourse(${course.id})">
                                    <div class="education-course-card-img mx-auto">
                                        <img src="https://img.icons8.com/color/96/teaching.png" alt="${course.name_course}"/>
                                    </div>
                                    <div class="education-course-card-text mx-auto text-center">
                                        ${course.name_course}
                                    </div>
                                </div>
                            </div>
                        `;
                        container.appendChild(courseDiv);
                    });
                }
            })
        .catch(error => console.error('Error fetching education topics:', error)); 
    }

    function GoToCourse(course_id) {

        window.location.href = `/education_course/${course_id}`;

    }

</script>

@endsection