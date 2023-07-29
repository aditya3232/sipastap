<style>
    .custom-image-corousel {
        max-width: 1300px;
        /* Adjust the desired width here */
        width: 100%;
        height: auto;
        display: flex;
        justify-content: center;
        align-items: center;
    }

</style>
<div class="col-sm-12">
    <div class="card">
        <div class="card-header">
            {{-- <h4>With controls</h4>
            <p>A carousel with previous and next control</p> --}}
        </div>
        <div class="card-body">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/images/samples/courosel-tidore.jpg" class="d-block w-100 custom-image-corousel" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/samples/courosel-tidore.jpg" class="d-block w-100 custom-image-corousel" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>
