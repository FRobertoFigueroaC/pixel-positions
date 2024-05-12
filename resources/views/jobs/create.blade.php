<x-layout>
  <x-page-heading> New Job </x-page-heading>

  <x-forms.form method="POST" action="/jobs" >
    {{-- 
        title - string
        salary - string
        location - string
        remote - boolean
        schedule - string
        url - string
        featured - boolean
      
      --}}
    <x-forms.input label="Title" name="title"  placeholder="CEO"/>
    <x-forms.input label="Salary" name="salary" placeholder="$120,000 USD"/>
    <x-forms.input label="Location" name="location" placeholder="USA"/>
    <x-forms.divider />
    <x-forms.checkbox label="Remote" name="remote" :value="true"/>

    <x-forms.select label="Schedule" name="schedule">
      <option>Part Time</option>
      <option>Full Time</option>
    </x-forms.select>

    <x-forms.input label="url" name="url" placeholder="https://acme.com/jobs/we-want-a-ceo"/>
    <x-forms.checkbox label="Featured (Cost extra)" name="featured" placeholder=""/>
    <x-forms.divider />
    <x-forms.input label="Tags (comma separated)" name="tags" placeholder="laracast, video, media"/>


    <x-forms.button>Create Job</x-forms.button>
  </x-forms.form>
</x-layout>