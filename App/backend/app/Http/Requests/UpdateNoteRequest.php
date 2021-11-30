<?php

namespace App\Http\Requests;

final class UpdateNoteRequest extends ApiRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'title'               => 'nullable|string',
            'body'                => 'nullable|string',
            'category_id'         => 'nullable|exists:categories,id',
            'folder_id'           => 'nullable|exists:folders,id',
            'attachments'         => 'nullable|array',
            'attachments.*'       => 'file',
        ];
    }
}