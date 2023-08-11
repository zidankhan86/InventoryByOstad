<div class="container px-5 my-5">
    <div class="row gx-5 justify-content-center">
        <div class="col-lg-11 col-xl-9 col-xxl-8">
            <section>
                <h2 class="text-secondary fw-bolder mb-4">Languages</h2>
                <div class="card shadow border-0 rounded-4 mb-5">
                    <div class="card-body p-5">
                        <div id="language-list" class="row row-cols-1 row-cols-md-3 mb-4">
                            <!-- Language items will be added here dynamically -->
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<script>
    async function LanguageList() {
        try {
            let URL = '/languageData';

            let response = await axios.get(URL);

            console.log('Response:', response.data); // Debugging

            document.getElementById('loading-div').classList.add('d-none');
            document.getElementById('content-div').classList.remove('d-none');

            let languageListContainer = document.getElementById('language-list');

            if (Array.isArray(response.data)) {
                response.data.forEach((item) => {
                    let languageDiv = document.createElement('div');
                    languageDiv.className = 'col p-2 mb-4 mb-md-0';
                    languageDiv.innerHTML = `
                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">
                            ${item['name']}
                        </div>
                    `;

                    languageListContainer.appendChild(languageDiv);
                });
            } else {
                console.error('Response data is not an array:', response.data);
            }
        } catch (error) {
            alert(error);
        }
    }

    // Call the function to populate the language list
    LanguageList();
</script>
