<!-- Search widget-->
<div class="card mb-4">
    <div class="card-header">Search</div>
    <form class="card-body" action="/search" method="GET" role="search">
        @csrf
        <div class="input-group">
            <input class="form-control" type="text" placeholder="Enter search term..."
                aria-label="Enter search term..." aria-describedby="button-search" name="query"/>
            <button class="btn btn-primary" id="button-search" type="submit">Go!</button>
        </div>
    </form>
</div>
