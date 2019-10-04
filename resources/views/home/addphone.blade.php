
<form action="{{url('/phone/list/')}}" method="post">
<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
Phone Brand:<br>
<input type="text" name='Brand'>
<br>

Phone Model:<br>
<input type="text" name='Model'>
<br>

Phone OS:<br>
<input type="text" name='Operation System'>
<br>

Phone Color:<br>
<input type="text" name='Color'>
<br>
Phone Announcement Year:<br>
<input type="text" name='Announcement Year'>
<br>
Memory:<br>
<input type="text" name='Memory'>
<br>
RAM:<br>
<input type="text" name='RAM'>
<br>
Rscreen Resolution:<br>
<input type="text" name='Screen Resolution'>
<br>
Screen Size:<br>
<input type="text" name='Screen Size'>
<br>
<br>
<input type="submit" value="Add Phone" >
</form>