<h4> Share yours ideas </h4>
        <div class="row">
            <form action="{{route('idea.create')}}" method="post">
                @csrf
                <div class="mb-3">
                    <textarea class="form-control" id="idea" rows="3" name="idea"></textarea>
                    @error('idea')
                        <span class="d-block fs-6 text-danger mt-2">{{$message}}</span>
                    @enderror
                </div>
                <div class="">
                    <button class="btn btn-dark" type="submit"> Share </button>
                </div>
            </form>
        </div>