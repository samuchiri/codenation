<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AnswerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'instructions'=>$this->instructions,
            'exam_id'=>$this->exam_id,
            'answer'=>$this->answer,
            'marking'=>$this->marking,
            'marks'=>$this->marks,
            'question_id'=>$this->question_id,
            'is_correct'=>$this->is_correct,
    ];
    }
}
