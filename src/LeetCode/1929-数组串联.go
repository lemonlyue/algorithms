// @link https://leetcode-cn.com/problems/concatenation-of-array/
func getConcatenation(nums []int) []int {
	count := len(nums)
	res := make([]int, count * 2)
	for i := 0; i < 2; i++ {
		for idx, num := range nums {
			idx = i * count + idx
			fmt.Println(idx, num)
			res[idx] = num
		}
	}
	return res
}