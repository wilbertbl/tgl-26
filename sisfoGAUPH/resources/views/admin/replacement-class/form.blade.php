<div class="form-group {{ $errors->has('nama_lengkap') ? 'has-error' : ''}}">
    <label for="nama_lengkap" class="control-label">{{ 'Nama Lengkap' }}</label>
    <input class="form-control" name="nama_lengkap" type="text" id="nama_lengkap" value="{{ isset($replacementclass->nama_lengkap) ? $replacementclass->nama_lengkap : ''}}" >
    {!! $errors->first('nama_lengkap', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('mata_kuliah') ? 'has-error' : ''}}">
    <label for="mata_kuliah" class="control-label">{{ 'Mata Kuliah' }}</label>
    <input class="form-control" name="mata_kuliah" type="text" id="mata_kuliah" value="{{ isset($replacementclass->mata_kuliah) ? $replacementclass->mata_kuliah : ''}}" >
    {!! $errors->first('mata_kuliah', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('kelas') ? 'has-error' : ''}}">
    <label for="kelas" class="control-label">{{ 'Kelas' }}</label>
    <input class="form-control" name="kelas" type="text" id="kelas" value="{{ isset($replacementclass->kelas) ? $replacementclass->kelas : ''}}" >
    {!! $errors->first('kelas', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('jadwal_kuliah') ? 'has-error' : ''}}">
    <label for="jadwal_kuliah" class="control-label">{{ 'Jadwal Kuliah' }}</label>
    <input class="form-control" name="jadwal_kuliah" type="date" id="jadwal_kuliah" value="{{ isset($replacementclass->jadwal_kuliah) ? $replacementclass->jadwal_kuliah : ''}}" >
    {!! $errors->first('jadwal_kuliah', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('jam_kuliah') ? 'has-error' : ''}}">
    <label for="jam_kuliah" class="control-label">{{ 'Jam Kuliah' }}</label>
    <input class="form-control" name="jam_kuliah" type="time" id="jam_kuliah" value="{{ isset($replacementclass->jam_kuliah) ? $replacementclass->jam_kuliah : ''}}" >
    {!! $errors->first('jam_kuliah', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tanggal_replacement') ? 'has-error' : ''}}">
    <label for="tanggal_replacement" class="control-label">{{ 'Tanggal Replacement' }}</label>
    <input class="form-control" name="tanggal_replacement" type="date" id="tanggal_replacement" value="{{ isset($replacementclass->tanggal_replacement) ? $replacementclass->tanggal_replacement : ''}}" >
    {!! $errors->first('tanggal_replacement', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('jam_replacement') ? 'has-error' : ''}}">
    <label for="jam_replacement" class="control-label">{{ 'Jam Replacement' }}</label>
    <input class="form-control" name="jam_replacement" type="time" id="jam_replacement" value="{{ isset($replacementclass->jam_replacement) ? $replacementclass->jam_replacement : ''}}" >
    {!! $errors->first('jam_replacement', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('alasan') ? 'has-error' : ''}}">
    <label for="alasan" class="control-label">{{ 'Alasan' }}</label>
    <input class="form-control" name="alasan" type="text" id="alasan" value="{{ isset($replacementclass->alasan) ? $replacementclass->alasan : ''}}" >
    {!! $errors->first('alasan', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
