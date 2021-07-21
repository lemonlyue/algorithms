// @link https://leetcode-cn.com/problems/maximum-product-of-two-elements-in-an-array/
func maxProduct(nums []int) int {
	var max = 0
	var second = 0
	for _, value := range nums {
		if max < value {
			second = max
			max = value
		} else if second < value {
			second = value
		}
	}
	return (max - 1) * (second - 1)
}