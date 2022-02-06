@yield('comment')

<div class="col-10">
    <form method="POST" action="{{ route('commentsStore') }}">
        <h1 style="display-5">Please post your comments here</h1>
        <div class="input-group mb-3" style="width:350px;">
            <input type="text" class="form-control" placeholder="Username" aria-label="Username" name="username">
        </div>

        <div class="form-floating">
            <textarea class="form-control " placeholder="Leave a comment here" id="floatingTextarea2" style="height: 80px; width: 600px;" name="comment"></textarea>
            <label for="floatingTextarea2">Comments</label>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
