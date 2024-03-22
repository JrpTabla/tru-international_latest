

<?php $__env->startSection('content'); ?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
<link rel="stylesheet" href="<?php echo e(asset ('assets/css/RPP/index.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset ('assets/css/education/landing-section.css')); ?>">

<div class="main">
    <!-- Fourth Section Start -->
    <section id="ep-landing-section" class="ep-landing-section">
        <div class="ep-landing-section-container row mx-auto">
            <div class="ep-landing-section-first-div">
                <div class="ep-landing-section-title text-center">
                    Trade Geek
                </div>
                <div class="ep-landing-section-sub-title text-center">
                    Because learning is <span>earning</span>
                </div>


                <div class="education-topic mx-auto p-5">

                        <select class="form-select form-select-lg" aria-label="Default select example" id="education-topic-selection">
                            <option selected>Select a Topic</option>
                            <!-- <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option> -->
                        </select>
                </div>

                <div class="w-100 d-flex">
                    <button class="btn Be-a-TRU-btn mx-auto">See Course</button>
                </div>
                

                <div class=" education-division" style="display: none;">
                    <div class="row education-level justify-content-center">
                        <!-- Education level buttons will be appended here -->
                        <div class="col-2 education-level-text-first text-center" onclick="displayCoursebasedOnLevel()">All Modules</div>
                    </div>

                    <div class="row education-course">
                        <!-- Education courses -->
                    </div>
                </div>
                
            </div>
        </div>
    </section>
</div>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        handleDifficultyData();
        // handleCourseData();
    });

    function handleDifficultyData() {
        const selectElement = document.getElementById('education-topic-selection');

        fetch(`/api/view-education-topic`)
            .then(response => response.json())
            .then(data => {
                // Clear existing options
                selectElement.innerHTML = '';

                // Add default option
                const defaultOption = document.createElement('option');
                defaultOption.textContent = 'Select a Topic';
                selectElement.appendChild(defaultOption);

                // Add options from fetched data
                data.forEach(topic => {
                    const option = document.createElement('option');
                    option.value = topic.id;
                    option.textContent = topic.name_topic;
                    selectElement.appendChild(option);
                });
            })
            .catch(error => console.error('Error fetching education topics:', error));
    }

</script>

<?php $__env->stopSection(); ?>

<!-- 


<div class="row education-level justify-content-center">
                    <div class="col-2 education-level-text text-center">
                        All Modules
                    </div>
                    <div class="col-2 education-level-text text-center">
                        Beginner
                    </div>
                    <div class="col-2 education-level-text text-center">
                        Intermediate
                    </div>
                    <div class="col-2 education-level-text text-center">
                        Expert
                    </div>
                    <div class="col-2 education-level-text text-center">
                        Professional
                    </div>
                </div>


                <div class="row education-course">
                    <div class="col-3 ">
                        <div class="education-course-card">
                        
                        
                        <div class="education-course-card-text text-center mx-auto">Forex 101</div>


                        </div>
                    </div>
                    <div class="col-3 ">
                        <div class="education-course-card">

                        <div class="education-course-card-text text-center mx-auto">Risk of Forex Trading</div>

                        
                        </div>
                    </div>
                    <div class="col-3 ">
                        <div class="education-course-card">

                        <div class="education-course-card-text text-center mx-auto">Forex Assets and Market</div>

                        
                        </div>
                    </div>
                    <div class="col-3 ">
                        <div class="education-course-card d-flex">

                        <div class="education-course-card-text text-center mx-auto">Forex Brokers and Trading Platform</div>

                        
                        </div>
                    </div>
                   
                </div>
 -->
<?php echo $__env->make('header.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin-IT\Desktop\tru-international\tru-international_latest\resources\views/pages/education.blade.php ENDPATH**/ ?>