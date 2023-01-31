<a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#modal-scrollable-filters">
    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
        <circle cx="14" cy="6" r="2"></circle>
        <line x1="4" y1="6" x2="12" y2="6"></line>
        <line x1="16" y1="6" x2="20" y2="6"></line>
        <circle cx="8" cy="12" r="2"></circle>
        <line x1="4" y1="12" x2="6" y2="12"></line>
        <line x1="10" y1="12" x2="20" y2="12"></line>
        <circle cx="17" cy="18" r="2"></circle>
        <line x1="4" y1="18" x2="15" y2="18"></line>
        <line x1="19" y1="18" x2="20" y2="18"></line>
    </svg>
    Filters
</a>

<div class="modal modal-blur fade" id="modal-scrollable-filters" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Restaurant Filters</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h3 class="card-title">Filter By:</h3>
                <div class="subheader mb-2">Cuisine Categories</div>
                <div class="mb-3">
                    <label class="form-check">
                        <input type="checkbox" class="form-check-input" name="form-tags[]" value="Chicken" checked="">
                        <span class="form-check-label">Chicken</span>
                    </label>
                    <label class="form-check">
                        <input type="checkbox" class="form-check-input" name="form-tags[]" value="Fast food">
                        <span class="form-check-label">Fast food</span>
                    </label>
                    <label class="form-check">
                        <input type="checkbox" class="form-check-input" name="form-tags[]" value="local food">
                        <span class="form-check-label">local food</span>
                    </label>
                    <label class="form-check">
                        <input type="checkbox" class="form-check-input" name="form-tags[]" value="International">
                        <span class="form-check-label">International</span>
                    </label>
                    <label class="form-check">
                        <input type="checkbox" class="form-check-input" name="form-tags[]" value="pizza">
                        <span class="form-check-label">pizza</span>
                    </label>
                    <label class="form-check">
                        <input type="checkbox" class="form-check-input" name="form-tags[]" value="kenyan">
                        <span class="form-check-label">kenyan</span>
                    </label>
                    <label class="form-check">
                        <input type="checkbox" class="form-check-input" name="form-tags[]" value="vegetarian">
                        <span class="form-check-label">vegetarian</span>
                    </label>
                    <label class="form-check">
                        <input type="checkbox" class="form-check-input" name="form-tags[]" value="wine">
                        <span class="form-check-label">wine</span>
                    </label>
                </div>

                <div class="subheader mb-2">Business Types</div>
                <div class="mb-3 btn-list">
                    <a href="/restaurants" class="btn">Restaurants<span class="badge bg-blue ms-2">289</span></a>
                    <a href="/supermarkets" class="btn">Supermarkets <span class="badge bg-blue ms-2">45</span></a>
                    <a href="/groceries" class="btn">Groceries <span class="badge bg-blue ms-2">22</span></a>
                    <a href="/pharmacies" class="btn">Pharmacies <span class="badge bg-blue ms-2">56</span></a>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn me-auto" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Apply Filters</button>
            </div>
        </div>
    </div>
</div>