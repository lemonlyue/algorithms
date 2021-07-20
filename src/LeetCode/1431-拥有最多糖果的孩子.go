// @link https://leetcode-cn.com/problems/kids-with-the-greatest-number-of-candies/
func kidsWithCandies(candies []int, extraCandies int) []bool {
	count := len(candies)
	var result = make([]bool, count)
	maxValue := max(candies)
	for i := 0; i < count; i++ {
		value := candies[i] + extraCandies
		if maxValue > value {
			result[i] = false
		} else {
			result[i] = true
		}
	}
	return result
}

// 求数组最大值
func max(data []int) int {
	var max = data[0]
	for _, val := range data {
		if max <= val {
			max = val
		}
	}
	return max
}
