@extends('layout', ['includeMenu' => false, 'includeFooter' => false])

<section id="home" class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-10">
                <div class="hero-content">
                    <h1>404 Page not found</h1>
                    <p>Check that your API token is correct and that the requested URL is valid.</p>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6">
                <img width="300" src="https://cdn.buttercms.com/9bPtzdJ6QSWkySNjlmyR" alt="" />
                <div class="hero-image text-center text-lg-end"></div>
            </div>
        </div>
    </div>
</section>

@if (isset($isInvalidToken) && $isInvalidToken === true)
    <script type="text/javascript">
        window.addEventListener('load', () => {
            throw new Error('Your Butter token is set to an invalid value. Please verify your token is correct.');
        });
    </script>
@endif