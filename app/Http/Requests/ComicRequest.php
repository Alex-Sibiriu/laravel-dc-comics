<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|min:3|max:100',
            'description' => 'required|min:10',
            'thumb' => 'required|min:3|max:255',
            'price' => 'required|min:3|max:10',
            'series' => 'required|min:3|max:100',
            'sale_date' => 'required',
            'type' => 'required|min:3|max:50',
            'artists' => 'required|min:3',
            'writers' => 'required|min:3'
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Il campo "Titolo" é obbligatorio',
            'title.min' => 'Il campo "Titolo" deve contenere almeno :min caratteri',
            'title.max' => 'Il campo "Titolo" non deve contenere più di :max caratteri',

            'description.required' => 'Il campo "Descrizione" é obbligatorio',
            'description.min' => 'Il campo "Descrizione" deve contenere almeno :min caratteri',

            'thumb.required' => 'Il campo "Immagine" é obbligatorio',
            'thumb.min' => 'Il campo "Immagine" deve contenere almeno :min caratteri',
            'thumb.max' => 'Il campo "Immagine" non deve contenere più di :max caratteri',

            'price.required' => 'Il campo "Prezzo" é obbligatorio',
            'price.min' => 'Il campo "Prezzo" deve contenere almeno :min caratteri',
            'price.max' => 'Il campo "Prezzo" non deve contenere più di :max caratteri',

            'series.required' => 'Il campo "Generi" é obbligatorio',
            'series.min' => 'Il campo "Generi" deve contenere almeno :min caratteri',
            'series.max' => 'Il campo "Generi" non deve contenere più di :max caratteri',

            'sale_date.required' => 'Il campo "Data di pubblicazione" é obbligatorio',

            'type.required' => 'Il campo "Tipologia" é obbligatorio',
            'type.min' => 'Il campo "Tipologia" deve contenere almeno :min caratteri',
            'type.max' => 'Il campo "Tipologia" non deve contenere più di :max caratteri',

            'artists.required' => 'Il campo "Artisti" é obbligatorio',
            'artists.min' => 'Il campo "Artisti" deve contenere almeno :min caratteri',

            'writers.required' => 'Il campo "Scrittori" é obbligatorio',
            'writers.min' => 'Il campo "Scrittori" deve contenere almeno :min caratteri',
        ];
    }
}
