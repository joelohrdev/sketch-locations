<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PHPUnit\Framework\MockObject\DuplicateMethodException;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'image', 'latitude', 'longitude', 'notes'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function votes()
    {
        return $this->belongsToMany(User::class, 'votes');
    }

    public function isVotedByUser(?User $user)
    {
        if (!$user) {
            return false;
        }
        return Vote::where('user_id', $user->id)
            ->where('idea_id', $this->id)
            ->exists();
    }

    public function vote(User $user)
    {
        if ($this->isVotedByUser($user)) {
            throw new DuplicateVoteException;
        }

        Vote::create([
            'location_id' => $this->id,
            'user_id'     => $this->id,
        ]);
    }

    public function removeVote(User $user)
    {
        $voteToDelete = Vote::where('location_id', $this->id)
            ->where('user_id', $user->id)
            ->first();

        if ($voteToDelete) {
            $voteToDelete->delete();
        } else {
            throw new VoteNotFoundException;
        }
    }
}
