package main

import "fmt"

func main()  {
	fmt.Println(maxDepth("8*((1*(5+6))*(8/6))"))
	fmt.Println(maxDepth("(1+(2*3)+((8)/4))+1"))
}

func maxDepth(s string) int {
	maxValue := 0
	num := 0
	length := len(s)
	for i := 0; i < length; i++ {
		if s[i] == '(' {
			num++
		}
		if s[i] == ')' {
			maxValue = max(num, maxValue)
			num--
		}
	}
	return maxValue
}

func max(a, b int) int {
	if a > b {
		return a
	}
	return b
}