package main

import "fmt"

func main()  {
	data := [][]string{{"phone","blue","pixel"}, {"computer","silver","lenovo"}, {"phone","gold","iphone"}}
	fmt.Println(countMatches(data, "color", "silver"))
}

func countMatches(items [][]string, ruleKey string, ruleValue string) int {
	var ruleIndex int
	num := 0
	switch ruleKey {
		case "type":
			ruleIndex = 0
			break
		case "color":
			ruleIndex = 1
			break
		default:
			ruleIndex = 2
	}
	for _, value := range items{
		if value[ruleIndex] == ruleValue {
			num++
		}
	}
	return num
}
