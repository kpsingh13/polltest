<?php



class pollAdminModel extends CI_Model {

	function getVotes($author){
		$this->db->select('votes');
		$this->db->where('author_name',$author);
		$previousVote = $this->db->get('pollanswere')->row_array(); //select votes where author_name='author'
		return $previousVote['votes'];   
	}
	
	function updateVote($author,$newVoteValue){
		$this->db->set('votes', $newVoteValue);
		$this->db->where('author_name', $author);
		$this->db->update('pollanswere'); // gives UPDATE mytable SET Votes =new_votes WHERE author_name='name'
	
	}
	function getAllData(){
		$this->db->select('id, author_name AS Author, votes AS Votes ');
		$this->db->order_by('votes','DESC');
		$result = $this->db->get('pollanswere')->result_array();;
		return $result;
	}
	
}