<section id="{{$pageFields['scroll_anchor_id']}}" class="feature-section">
    <div class="container">
        <div class="col-lg-11 col-md-11 text-center">
            <div class="section-title mb-60">
                <h2 class="mb-20">{{$pageFields['headline']}}</h2>
                <p>{{$pageFields['subheadline']}}</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-11">
                <div class="row">
                    @foreach($pageFields['features'] as $feature)
                        <div class="col-lg-4 col-md-4 single-feature1">
                            <div class="single-feature">
                                <div class="feature-icon">
                                    <img src="{{$feature['icon']}}" alt="" />
                                </div>
                                <div class="feature-content">
                                    <h4>{{$feature['headline']}}</h4>
                                    <p>{{$feature['description']}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>