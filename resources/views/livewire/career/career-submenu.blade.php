<!-- Submenu for screen size xs - md -->
<div class="row d-inline d-sm-inline d-md-inline d-lg-none d-xl-none">
    <div class="col-12 text-end">
        <button class="btn btn-outline-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#careerSubmenu" aria-expanded="false" aria-controls="careerSubmenu">
            <i class="fa-solid fa-bars"></i>
        </button>
    </div>
</div>

<div class="collapse d-lg-block d-xl-block sub-container-box mb-4" id="careerSubmenu">
    <div class="row pt-3">
        <div class="col-12">
            <h5>Categories</h5>
        </div>
        <div class="col-12">
            <form>
                <ul class="list-unstyled">
                    <li>
                        <button type="submit" class="fs-7 btn btn-light w-100 text-start mb-1
                            @if ($query == null)
                                active
                            @endif
                        " value="" name="query">All</button>
                    </li>
                    @foreach ($careerCategories as $category)
                        <li>
                            <button type="submit" class="fs-7 btn btn-light w-100 text-start my-1
                                @if ($query == $category->career_category)
                                    active
                                @endif
                            " value="{{ $category->career_category }}" name="query">{{ $category->career_category }}</button>
                        </li>
                    @endforeach
                </ul>
            </form>
        </div>
    </div>
</div>
