def dfs(start, goal, path=None):
    if path is None:
        path = []
    path = path + [start]
    if start == goal:
        return path
    for node in graph[start]:
        if node not in path:
            new_path = dfs(node, goal, path)
            if new_path:
                return new_path
    return None

graph = {
    'A': ['B', 'C'],
    'B': ['D', 'E'],
    'C': ['F'],
    'D': [],
    'E': [],
    'F': []
}

print("DFS Path from A to F: ", dfs('A', 'F'))
