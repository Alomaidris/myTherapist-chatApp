<?php include('./includes/_header.php') ?>

    <main>
        <section class="options">
            <h2 class="page-title">What can we help you with?</h2>
            
            <div class="tag">
                <p class="description">choose one or more area that you are experiencing difficulties with?</p>
                <div class="btn-group">
                    <button>Drug Abuse</button>
                    <button>Stress</button>
                    <button>Grief</button>
                    <button>Depression</button>
                    <button>Anxiety</button>
                    <button>Self Esteem</button>
                    <button>Anger Management</button>
                    <button>Phobia</button>
                </div>
            </div>

            <div class="therapist-gender">
                <p class="description">Would you prefer a male or female therapist?</p>
                <div class="btn-group">
                    <button>Male</button>
                    <button>Female</button>
                    <button>Doesn't Matter</button>
                </div>
            </div>

            <div class="age">
                <p class="description">How old are you?</p>
                <input type="number" name="age" id="age">
            </div>

            <div class="media-type">
                <p class="description">How would you prefer having session with your therapist?</p>
                <div class="btn-group">
                    <button>Text Chat</button>
                    <button>Audio</button>
                    <button>Video</button>
                </div>
            </div>

            <div class="btn-holder">
                <a href="chats.html" class="btn btn-individual-chat">Individual Therapy</a>
            </div>
            
        </section>
    </main>

<?php include('./includes/_footer.php') ?>
