<div class="form-group">
    <label for="Points">Points</label>
    <input type="text" name="points" class="form-control" placeholder="point...">
    <div>{{ $errors->first('points') }}</div>
</div>
<div class="form-group">
    <label for="Rewarded-user">Rewarded User</label>
    <select name="user_id" id="user_id">
        @foreach ($users as $user)
        <option value="{{ $user->id }}">{{ $user->name }}</option>
        @endforeach
    </select>
    <div>{{ $errors->first('user_id') }}</div>
</div>
<div class="form-group">
    <label for="Points">Point Status</label>
    <input type="hidden" name="point_status" class="form-control" value="0">
    <div>{{ $errors->first('point_status') }}</div>
</div>

@csrf