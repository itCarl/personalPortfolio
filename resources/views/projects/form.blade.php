<div class="form__group field">
    <input type="text" value="{{ old('title') ?? $project->title }}" class="form__field" placeholder="Title" name="title" id='title' required />
    <label for="name" class="form__label"> Titel </label>
    <div class="error">{{ $errors->first('title') }}</div>
  </div>
  <div class="form__group field">
    <textarea class="form__field" name="short_description" id='short_description'>{{ old('short_description') ?? $project->short_description }}</textarea>
    <label for="short_description" class="form__label"> kurz Beschreibung </label>
    <div class="error">{{ $errors->first('short_description') }}</div>
</div>
<div class="form__group field">
    <textarea class="form__field" name="description" id='description'>{{ old('description') ?? $project->description }}</textarea>
    <label for="short_description" class="form__label"> Beschreibung </label>
    <div class="error">{{ $errors->first('description') }}</div>
</div>
<div class="form__group field">
    <input type="file" class="form__field" name="image" id='image' />
    <label for="image" class="form__label"> Projekt Bild </label>
    <div class="error">{{ $errors->first('image') }}</div>
</div>
<div class="form__group field">
    <input type="text" value="{{ old('tags') ?? $project->tags }}" class="form__field" placeholder="Tags" name="tags" id='tags' required />
    <label for="name" class="form__label"> Tags </label>
    <div class="error">{{ $errors->first('tags') }}</div>
</div>

{{ csrf_field() }}