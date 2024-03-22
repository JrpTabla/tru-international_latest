

<?php $__env->startSection('content'); ?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
<link rel="stylesheet" href="<?php echo e(asset ('assets/css/RPP/index.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset ('assets/css/education/landing-section.css')); ?>">

<div class="main">
    <section id="ep-landing-section" class="ep-landing-section">
        <div class="ep-landing-section-container row mx-auto">
            <div class="ep-landing-section-first-div">
                <div class="ep-landing-section-title text-center">Trade Geek</div>
                <div class="ep-landing-section-sub-title text-center">Because learning is <span>earning</span></div>
                <div class="education-topic mx-auto p-5">
                    <select class="form-select form-select-lg" aria-label="Default select example" id="education-topic-selection"></select>
                </div>
                <div class="education-topic-div-btn w-100 d-flex">
                    <button class="btn Be-a-TRU-btn mx-auto" onclick="GoToCourse()">See Course</button>
                </div> 
            </div>
        </div>
    </section>
</div>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        handleDifficultyData();
    });

    function handleDifficultyData() {
        const selectElement = document.getElementById('education-topic-selection');

        fetch(`/api/view-education-topic`)
            .then(response => response.json())
            .then(data => {

                selectElement.innerHTML = '';

                const defaultOption = document.createElement('option');
                defaultOption.value = 0;
                defaultOption.textContent = 'Select a Topic';
                selectElement.appendChild(defaultOption);

                data.forEach(topic => {
                    const option = document.createElement('option');
                    option.value = topic.id;
                    option.textContent = topic.name_topic;
                    selectElement.appendChild(option);
                });
            })
        .catch(error => console.error('Error fetching education topics:', error));
    }

    function GoToCourse() {

        const selectElement = document.getElementById("education-topic-selection");
        const selectedOption = selectElement.options[selectElement.selectedIndex];
        const selectedValue = selectedOption.value;

        if (selectedValue === "0") {
            alert("Kindly select a Topic!");
        } else {
            window.location.href = `/education/${selectedValue}`;
        }
    }


</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('header.subpage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin-IT\Desktop\tru-international\tru-international_latest\resources\views/pages/education/education.blade.php ENDPATH**/ ?>