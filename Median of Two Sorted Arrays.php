class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2) {
        
       if (empty($nums1) && empty($nums2)) {
    		return (float)0;
    	}
        $nums = array_merge($nums1, $nums2);
        sort($nums);
        if (count($nums) % 2 !=0) {
        	return $nums[count($nums) / 2 ];
        }else{
        	return  ($nums[count($nums) / 2 ]+ $nums[count($nums) / 2 -1]) / 2;
        }
    }
}
