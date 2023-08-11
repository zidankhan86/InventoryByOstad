 <!-- About Section-->
 <section class="bg-light py-5">
    <div class="container px-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-xxl-8">
                <div class="text-center my-5">
                    <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">About Me</span></h2>
                    <p class="lead fw-light mb-4">My name is Start Bootstrap and I help brands grow.</p>
                    <p class="text-muted" id="details">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit dolorum itaque qui unde quisquam consequatur autem. Eveniet quasi nobis aliquid cumque officiis sed rem iure ipsa! Praesentium ratione atque dolorem?</p>
                    <div class="d-flex justify-content-center fs-2 gap-4">
                        <a target="_blank" class="text-gradient" id="tw" href=""><i class="bi bi-twitter"></i></a>
                        <a target="_blank" class="text-gradient" id="lk" href=""><i class="bi bi-linkedin"></i></a>
                        <a target="_blank" class="text-gradient" id="gt" href=""><i class="bi bi-github"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script>

        About();

    async function About() {

        try {

            let URL = "/aboutData"

            document.getElementById('loading-div').classList.remove('d-none');
           document.getElementById('content-div').classList.add('d-none');

            let response = await axios.get(URL);

            document.getElementById('details').innerHTML = response.data['details'];

        } catch (error) {

            alert('Error')

        }

    }

    SocialLink();
    async function SocialLink() {



        try {

            let URL = "/socialData"
            let response = await axios.get(URL);

            document.getElementById('loading-div').classList.add('d-none');
           document.getElementById('content-div').classList.remove('d-none');

            document.getElementById('tw').href = response.data['twitterLink'];
            document.getElementById('lk').href = response.data['githubLink'];
            document.getElementById('gt').href = response.data['linkedinLink'];

        } catch (error) {

            alert('Error')

        }

    }
</script>
